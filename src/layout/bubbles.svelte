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
  export let bubbles

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
            opacity: .5;
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
