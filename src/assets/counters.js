class Counter {
  constructor (index, number) {
    this.label = 'pages.about.counters.' + index
    this.number = number
  }
}

export default [
  new Counter('members', 10),
  new Counter('experience', 62),
  new Counter('projects', 5),
  new Counter('loc', '1000+')
]
