/* eslint no-unused-vars: "off" */
class Partner {
  constructor (id, logo) {
    this.id = id
    this.logo = logo
    this.header = 'pages.partnerships.' + id + '.header'
    this.lead = 'pages.partnerships.' + id + '.lead'
  }
}

export default [
  new Partner('lpm', '/images/partnerships/lpm.png'),
  new Partner('soda', '/images/partnerships/soda.png'),
  new Partner('cwup', '/images/partnerships/cwup.png'),
]
