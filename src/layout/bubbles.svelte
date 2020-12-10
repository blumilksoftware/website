<div class="circles">
    {#each bubbles as bubble}
        <div style="{ getStyle(bubble) }"></div>
    {/each}
</div>

<script>
  const bubbles = [
    { left: 20, size: 32, delay: 1, duration: 6 },
    { left: 25, size: 40, delay: 0, duration: 7 },
    { left: 36, size: 36, delay: 2, duration: 5 },
    { left: 5, size: 64, delay: 0, duration: 10 },
    { left: 56, size: 72, delay: 0, duration: 5 },
    { left: 70, size: 144, delay: 3, duration: 7 },
    { left: 72, size: 36, delay: 7, duration: 5 },
    { left: 75, size: 24, delay: 6, duration: 6 },
    { left: 92, size: 108, delay: 0, duration: 8 }
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
</script>

<style>
    .circles {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
    }

    .circles div {
        position: absolute;
        background: #4299e1;
        opacity: .15;
        animation: animate linear infinite;
        bottom: -150px;
        border-radius: 100%;
    }

    @keyframes animate {
        0% {
            transform: translateY(0);
            opacity: .75;
        }

        100% {
            transform: translateY(-100vh);
            opacity: 0;
        }
    }
</style>