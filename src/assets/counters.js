class Counter {
  constructor (index, number) {
    this.label = 'pages.about.counters.' + index
    this.number = number
  }
}

export default [
  new Counter('members', 19),
  new Counter('experience', 133),
  new Counter('repositories', 75),
  new Counter('loc', '1000+'),
]
