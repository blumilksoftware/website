<div class="circles">
    {#each bubbles as bubble}
        <div style="{getStyle(bubble)}"></div>
    {/each}
</div>

<script>
    let bubbles = [
        {"left": 25, "size": 80, "delay": 0},
        {"left": 10, "size": 20, "delay": 2, "duration": 12},
        {"left": 70, "size": 20, "delay": 4},
        {"left": 40, "size": 60, "delay": 0, "duration": 18},
        {"left": 65, "size": 20, "delay": 0},
        {"left": 75, "size": 110, "delay": 3},
        {"left": 35, "size": 150, "delay": 7},
        {"left": 50, "size": 25, "delay": 15, "duration": 45},
        {"left": 20, "size": 15, "delay": 2, "duration": 35},
        {"left": 85, "size": 150, "delay": 0, "duration": 11}
    ]

    function getStyle(bubble) {
        let styles = [
            "left:" + bubble.left + "%",
            "width:" + bubble.size + "px",
            "height:" + bubble.size + "px",
            "animation-delay:" + bubble.delay + "s",
        ]

        if (bubble.duration) {
            styles.push("animation-duration:" + bubble.duration + "s")
        }

        return styles.join(";")
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
        background: #a8bedc;
        opacity: .1;
        animation: animate 40s linear infinite;
        bottom: -150px;
        border-radius: 100%;
    }

    @keyframes animate {
        0% {
            transform: translateY(0);
            opacity: .75;
        }

        100% {
            transform: translateY(-1000px);
            opacity: 0;
        }
    }
</style>