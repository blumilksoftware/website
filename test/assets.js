import { describe, it } from 'mocha'
import assert from 'assert'

import navigationItems from '../src/assets/navigation'
import socialLinks from '../src/assets/socials'

function testDefaultAssetsArray (array, name, className) {
  describe('src/assets/' + name + '.js', () => {
    it('module is exporting valid array', () => {
      assert.ok(Array.isArray(array))
    })

    it('module is exporting array of proper objects', () => {
      for (const item of array) {
        assert.strictEqual(item.constructor.name, className)
      }
    })
  })
}

describe('testing assets', () => {
  testDefaultAssetsArray(navigationItems, 'navigation', 'NavigationItem')
  testDefaultAssetsArray(socialLinks, 'social', 'SocialMedia')
})
