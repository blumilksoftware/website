<div class="circles" data-cy="bubbles">
    {#each bubbles as bubble, index}
        <div class="bubble"
             on:click={ (event) => pop(event, index) }
             style="{ getStyle(bubble) }"
             class:popping="{ bubbles[index].popping }"
             on:animationiteration={ bubbles[index].popping = false }
        >
            <div class="inner"></div>
        </div>
    {/each}
</div>

<script>
  const bubbles = [
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

  function getStyle (bubble) {
    const styles = [
      'left:' + bubble.left + '%',
      'width:' + bubble.size + 'px',
      'height:' + bubble.size + 'px',
      'animation-delay:' + bubble.delay + 's'
    ]

    if (bubble.duration) {
      styles.push('animation-duration:' + bubble.duration + 's')
    }

    return styles.join(';')
  }

  function pop (event, index) {
    if (!bubbles[index].popping) {
      bubbles[index].popping = true
    }
  }
</script>

<style>
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