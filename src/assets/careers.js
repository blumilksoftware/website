class Requirement {
  constructor (index) {
    this.requirement = 'pages.career.requirements.' + index
  }
}

class Stack {
  constructor (index) {
    this.name = 'pages.career.stack.' + index + '.name'
    this.description = 'pages.career.stack.' + index + '.description'
  }
}

class CareerData {
  constructor (requirements, stack) {
    this.requirements = requirements
    this.stack = stack
  }
}

const requirements = [
  new Requirement('docker'),
  new Requirement('di'),
  new Requirement('testing'),
  new Requirement('composer'),
  new Requirement('oop'),
  new Requirement('eloquent'),
  new Requirement('tools'),
  new Requirement('xdebug'),
  new Requirement('processes')
]

const stack = [
  new Stack('php'),
  new Stack('laravel'),
  new Stack('databases'),
  new Stack('behat'),
  new Stack('ecs'),
  new Stack('docker'),
  new Stack('github'),
  new Stack('google'),
  new Stack('slack')
]

export default new CareerData(requirements, stack)
