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
        animation-duration: 4000ms;
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
      0% {
       clip-path: path('M0 0C8.33 -8.33 16.67 -12.5 25 -12.5C37.5 -12.5 36.57 -0.27 50 0C63.43 0.27 62.5 -34.37 75 -34.37C87.5 -34.37 87.5 -4.01 100 0C112.5 4.01 112.38 -18.34 125 -18.34C137.62 -18.34 138.09 1.66 150.48 0C162.86 -1.66 162.16 -25 174.54 -25C182.79 -25 191.28 -16.67 200 0L200 200L0 200L0 0Z');
          }
      100% {
        clip-path: path('M0 200C8.33 270.83 16.67 306.25 25 306.25C37.5 306.25 36.57 230.98 50 231.25C63.43 231.52 62.5 284.38 75 284.38C87.5 284.38 87.5 208.49 100 212.5C112.5 216.51 112.38 300.41 125 300.41C137.62 300.41 138.09 239.16 150.48 237.5C162.86 235.84 162.16 293.75 174.54 293.75C182.79 293.75 191.28 262.5 200 200L200 200L0 200L0 200Z');
      }
    }
</style>
