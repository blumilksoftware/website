<div class="circles" data-cy="bubbles">
    {#each bubbles as bubble, index}
        <div class="bubble"
             on:click={ (event) => pop(event, index) }
             style="{ getStyle(bubble) }"
             class:popping="{ bubbles[index].popping }"
             on:animationiteration={ (event) => animationEndHandler(event, index) }
        >
            <div class="inner"></div>
            <div class="particles"></div>
        </div>
    {/each}
</div>

<script>
  let bubbles = [
    { left: 20, size: 32, delay: 1, duration: 6, popping: false },
    { left: 25, size: 40, delay: 0, duration: 7, popping: false },
    { left: 36, size: 36, delay: 2, duration: 5, popping: false },
    { left: 5, size: 64, delay: 0, duration: 10, popping: false },
    { left: 56, size: 72, delay: 0, duration: 5, popping: false },
    { left: 70, size: 144, delay: 3, duration: 7, popping: false },
    { left: 72, size: 36, delay: 7, duration: 5, popping: false },
    { left: 75, size: 24, delay: 6, duration: 6, popping: false },
    { left: 92, size: 108, delay: 0, duration: 8, popping: false }
  ]

  if (window.location.pathname === '/bubbles') {
    const times = prompt('Please enter number of bubbles (10 - 200):', 10)
    bubbles = getGeneratedBubbles(checkTimes(parseInt(times)))
  }

  function getStyle (bubble) {
    const styles = [
      `left: ${bubble.left}%`,
      `width: ${bubble.size}px`,
      `height: ${bubble.size}px`,
      `animation-delay: ${bubble.delay}s`
    ]

    if (bubble.duration) {
      styles.push(`animation-duration: ${bubble.duration}s`)
    }

    return styles.join(';')
  }

  function pop (event, index) {
    if (!bubbles[index].popping) {
      bubbles[index].popping = true
      for (let i = 0; i < Math.random() * 10 + 2; i++) {
        createParticle(event.target.parentElement.getElementsByClassName('particles')[0])
      }
    }
  }

  function createParticle (parent) {
    const particle = document.createElement('div')
    const size = Math.floor(Math.random() * (parent.offsetWidth / 3) + 5)
    particle.style.width = `${size}px`
    particle.style.height = `${size}px`
    particle.style.background = `hsl(${Math.random() * 20 + 210}, 70%, 60%)`
    particle.style.margin = `-${size / 2}px 0 0 -${size / 2}px`
    parent.appendChild(particle)

    const destinationX = (parent.offsetWidth * 2) * (Math.random() - 0.5)
    const destinationY = (parent.offsetWidth * 2) * (Math.random() - 0.5)

    const animation = particle.animate([
      {
        transform: `translate(${destinationX / 3}px, ${destinationY / 3}px)`,
        opacity: 0
      },
      {
        opacity: 1,
        offset: 0.2
      },
      {
        transform: `translate(${destinationX}px, ${destinationY}px)`,
        opacity: 0
      }
    ], {
      duration: 300 + Math.random() * 1000,
      easing: 'ease-out',
      delay: Math.random() * 200
    })

    animation.onfinish = () => {
      particle.remove()
    }
  }

  function animationEndHandler (event, index) {
    bubbles[index].popping = false
  }

  function getGeneratedBubbles (times = 10) {
    const generatedBubbles = []
    for (let i = 0; i < times; i++) {
      generatedBubbles.push(
        { left: getRndInteger(1, 99), size: getRndInteger(20, 150), delay: getRndInteger(4, 10), duration: getRndInteger(5, 14), popping: false }
      )
    }
    return generatedBubbles
  }

  function getRndInteger (min, max) {
    return Math.floor(Math.random() * (max - min)) + min
  }

  function checkTimes (times) {
    if (times > 0 && times < 200 && (typeof times === 'number')) {
      return times
    }
    return 15
  }
</script>

<style>
    .particles :global(div) {
        border-radius: 50%;
        pointer-events: none;
        position: fixed;
        left: 50%;
        top: 50%;
    }

    .bubble.popping .inner {
        animation-name: pop;
        animation-duration: 500ms;
        animation-iteration-count: 1;
        animation-fill-mode: forwards;
        animation-timing-function: cubic-bezier(.19, 1, .22, 1);
    }

    .circles {
        bottom: 0;
        left: 0;
        width: 100%;
        overflow: hidden;
        mix-blend-mode: multiply;
    }

    .bubble {
        position: fixed;
        animation: raise linear infinite;
        bottom: -150px;
    }

    .inner {
        top: 0;
        left: 0;
        border-radius: 100%;
        background: #4299e1;
        width: 100%;
        height: 100%;
        transition-duration: 300ms;
    }

    .bubble:hover .inner {
        background: #1066ad;
    }

    @keyframes raise {
        0% {
            transform: translateY(0);
            opacity: .75;
        }

        100% {
            transform: translateY(-100vh);
            opacity: 0;
        }
    }

    @keyframes pop {
        100% {
            transform: scale(1.5);
            opacity: 0;
        }
    }
</style>
