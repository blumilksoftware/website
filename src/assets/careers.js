class Requirement {
  constructor (index) {
    this.requirement = 'pages.career.requirements.' + index
  }
}

class Stack {
  constructor (index, icon = 'check square outline icon') {
    this.name = 'pages.career.stack.' + index + '.name'
    this.description = 'pages.career.stack.' + index + '.description'
    this.icon = icon
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
  new Stack('php', 'php icon'),
  new Stack('laravel', 'laravel icon'),
  new Stack('databases', 'database icon'),
  new Stack('behat'),
  new Stack('ecs'),
  new Stack('docker', 'docker icon'),
  new Stack('github', 'github icon'),
  new Stack('google', 'google icon'),
  new Stack('slack', 'slack icon')
]

export default new CareerData(requirements, stack)
