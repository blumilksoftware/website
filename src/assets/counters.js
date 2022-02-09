class Counter {
  constructor (index, number) {
    this.label = 'pages.about.counters.' + index
    this.number = number
  }
}

export default [
  new Counter('members', 12),
  new Counter('experience', 80),
  new Counter('repositories', 29),
  new Counter('loc', '1000+')
]
