class Job {
  constructor (index) {
    this.url = './' + index
    this.name = 'pages.career.jobs.' + index + '.name'
    this.description = 'pages.career.jobs.' + index + '.description'
  }
}

export default [
  new Job('developer'),
  new Job('intern'),
]
