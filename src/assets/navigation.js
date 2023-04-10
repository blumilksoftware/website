class NavigationItem {
  constructor (link, label, external = false) {
    this.label = label
    this.link = link
    this.external = external
  }
}

export default [
  new NavigationItem('./about', 'navigation.about'),
  new NavigationItem('./services', 'navigation.services'),
  new NavigationItem('./references', 'navigation.references'),
  new NavigationItem('./partnerships', 'navigation.partnerships'),
  new NavigationItem('./career', 'navigation.career'),
  new NavigationItem('./contact', 'navigation.contact'),
]
