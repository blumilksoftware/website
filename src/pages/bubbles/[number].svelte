<Bubbles {bubbles}/>

<script>
  import { params } from '@roxi/routify'
  import Bubbles from '@/layout/bubbles.svelte'

  const bubbles = getGeneratedBubbles(checkTimes(parseInt($params.number)))

  function getGeneratedBubbles (times = 10) {
    const generatedBubbles = []
    for (let i = 0; i < times; i++) {
      generatedBubbles.push(
        {
          left: getRandomInteger(1, 99),
          size: getRandomInteger(20, 150),
          delay: getRandomInteger(4, 10),
          duration: getRandomInteger(5, 14),
          popping: false,
        },
      )
    }
    return generatedBubbles
  }

  function getRandomInteger (min, max) {
    return Math.floor(Math.random() * (max - min)) + min
  }

  function checkTimes (times) {
    if (times > 0 && times < 200 && (typeof times === 'number')) {
      return times
    }
    return 15
  }
</script>
