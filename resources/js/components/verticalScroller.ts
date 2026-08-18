export default function verticalScroller() {
  return {
    position: 0,
    loopHeight: 0,
    speed: 0,
    dragging: false,
    startY: 0,
    startPosition: 0,
    lastTime: null as number | null,

    init(this: any) {
      this.$nextTick(() => {
        this.loopHeight = this.$el.scrollHeight / 2;
        this.speed = this.loopHeight / 35;
        requestAnimationFrame(this.tick.bind(this));
      });

      this.$el.querySelectorAll('img').forEach((img: HTMLImageElement) => {
        img.addEventListener('load', () => {
          this.loopHeight = this.$el.scrollHeight / 2;
          this.speed = this.loopHeight / 35;
        });
      });
    },

    tick(this: any, time: number) {
      if (this.lastTime === null) this.lastTime = time;
      const delta = (time - this.lastTime) / 1000;
      this.lastTime = time;

      if (!this.dragging) {
        this.position += this.speed * delta;
        this.wrap();
      }

      requestAnimationFrame(this.tick.bind(this));
    },

    wrap(this: any) {
      if (this.loopHeight <= 0) return;
      this.position = ((this.position % this.loopHeight) + this.loopHeight) % this.loopHeight;
    },

    onPointerDown(this: any, e: PointerEvent) {
      this.dragging = true;
      this.startY = e.clientY;
      this.startPosition = this.position;
      (e.currentTarget as HTMLElement).setPointerCapture(e.pointerId);
    },

    onPointerMove(this: any, e: PointerEvent) {
      if (!this.dragging) return;
      const delta = this.startY - e.clientY;
      this.position = this.startPosition + delta;
      this.wrap();
    },

    onPointerUp(this: any) {
      this.dragging = false;
      this.lastTime = null;
    },
  };
}
