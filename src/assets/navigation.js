class NavigationItem {
  constructor (link, label, external = false) {
    this.label = label
    this.link = link
    this.external = external
  }
}

export default [
  new NavigationItem('about', 'About'),
  new NavigationItem('services', 'Services'),
  new NavigationItem('career', 'Career'),
  new NavigationItem('contact', 'Contact'),
  new NavigationItem('https://blog.blumilk.pl/', 'Blog', true)
]
