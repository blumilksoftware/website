class SocialMedia {
  constructor (name, icon, url) {
    this.name = name
    this.icon = icon
    this.url = url
  }
}

export default [
  new SocialMedia('Github', 'github icon', 'https://github.com/blumilksoftware'),
  new SocialMedia('LinkedIn', 'linkedin icon', 'https://linkedin.com/company/blumilksoftware'),
  new SocialMedia('Facebook', 'facebook icon', 'https://facebook.com/blumilksoftware'),
  new SocialMedia('Twitter', 'twitter icon', 'https://twitter.com/blumilksoftware')
]
