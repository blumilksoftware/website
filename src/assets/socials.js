class SocialMedia {
  constructor (name, icon, url) {
    this.name = name
    this.icon = icon
    this.url = url
  }
}

export default [
  new SocialMedia('Github', 'github square icon', 'https://github.com/blumilksoftware'),
  new SocialMedia('LinkedIn', 'linkedin icon', 'https://linedin.com/company/blumilksoftware'),
  new SocialMedia('Facebook', 'facebook square icon', 'https://facebook.com/blumilksoftware'),
  new SocialMedia('Twitter', 'twitter square icon', 'https://github.com/blumilksoftware')
]
