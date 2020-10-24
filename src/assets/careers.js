class Requirement {
  constructor (requirement) {
    this.requirement = requirement
  }
}

class Stack {
  constructor (name, description, icon = 'check square outline icon') {
    this.name = name
    this.description = description
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
  new Requirement('know how to use PHP in dockerized environment'),
  new Requirement('use dependency injection in your Laravel applications by default'),
  new Requirement('test your code (even before you write any LOC)'),
  new Requirement('know the difference between composer install and update'),
  new Requirement('have a good knowledge about object-oriented PHP'),
  new Requirement('know how to avoid n+1 selects problem in Eloquent'),
  new Requirement('use automated tools to improve our code quality'),
  new Requirement('debug your applications with Xdebug'),
  new Requirement('join Github Flow, code reviews and CI/CD processes')
]

const stack = [
  new Stack('PHP', 'with the newest version if that\'s possible', 'php icon'),
  new Stack('Laravel framework', 'when it\'s the best option for development', 'laravel icon'),
  new Stack('databases', 'tailored for specific needs', 'database icon'),
  new Stack('Behat', 'for Behaviour-driven development'),
  new Stack('ECS & Psalm', 'to maintain code quality'),
  new Stack('Docker', 'to keep everything in manageable containers', 'docker icon'),
  new Stack('Github', 'for version control, code reviews and CI/CD', 'github icon'),
  new Stack('Google', 'for docs, emails, calendar and other stuff', 'google icon'),
  new Stack('Slack', 'to internal communication', 'slack icon')
]

export default new CareerData(requirements, stack)
