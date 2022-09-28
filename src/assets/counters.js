class Counter {
  constructor (index, number) {
    this.label = 'pages.about.counters.' + index
    this.number = number
  }
}

export default [
  new Counter('members', 18),
  new Counter('experience', 112),
  new Counter('repositories', 45),
  new Counter('loc', '1000+')
]
