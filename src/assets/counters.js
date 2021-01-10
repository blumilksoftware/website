class Counter {
  constructor (index, number) {
    this.label = 'pages.about.counters.' + index
    this.number = number
  }
}

export default [
  new Counter('members', 10),
  new Counter('experience', 54),
  new Counter('projects', 4),
  new Counter('loc', '1000+')
]
