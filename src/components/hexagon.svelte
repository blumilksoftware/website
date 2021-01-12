<div class="m-1" title="{ title }">
    <div class="hexagon { background }" style="background-image: url('{ image }')">
        <div class="hexTop"></div>
        <div class="hexBottom"></div>
    </div>
</div>

<script>
  export let title = ''
  export let image = ''
  export let background = ''
</script>

<style>
    .hexagon {
        position: relative;
        width: 120px;
        height: 69.28px;
        margin: 34.64px 0;
        background-size: auto 138.5641px;
        background-position: center;
    }

    .hexTop,
    .hexBottom {
        position: absolute;
        z-index: 1;
        width: 84.85px;
        height: 84.85px;
        overflow: hidden;
        -webkit-transform: scaleY(0.5774) rotate(-45deg);
        -ms-transform: scaleY(0.5774) rotate(-45deg);
        transform: scaleY(0.5774) rotate(-45deg);
        background: inherit;
        left: 17.57px;
    }

    .hexTop:after,
    .hexBottom:after {
        content: "";
        position: absolute;
        width: 120.0000px;
        height: 69.2820323027551px;
        -webkit-transform: rotate(45deg) scaleY(1.7321) translateY(-34.6410px);
        -ms-transform: rotate(45deg) scaleY(1.7321) translateY(-34.6410px);
        transform: rotate(45deg) scaleY(1.7321) translateY(-34.6410px);
        -webkit-transform-origin: 0 0;
        -ms-transform-origin: 0 0;
        transform-origin: 0 0;
        background: inherit;
    }

    .hexTop {
        top: -42.4264px;
    }

    .hexTop:after {
        background-position: center top;
    }

    .hexBottom {
        bottom: -42.4264px;
    }

    .hexBottom:after {
        background-position: center bottom;
    }

    .hexagon:after {
        content: "";
        position: absolute;
        top: 0.0000px;
        left: 0;
        width: 120.0000px;
        height: 69.2820px;
        z-index: 2;
        background: inherit;
    }
</style>