class Counter {
  constructor (index, number) {
    this.label = 'pages.about.counters.' + index
    this.number = number
  }
}

export default [
  new Counter('members', 13),
  new Counter('experience', 82),
  new Counter('repositories', 32),
  new Counter('loc', '1000+')
]
