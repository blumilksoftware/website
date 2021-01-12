import { describe, it } from 'mocha'
import assert from 'assert'

import navigationItems from '../src/assets/navigation'
import socialLinks from '../src/assets/socials'
import careerData from '../src/assets/careers'
import contactData from '../src/assets/contact'
import references from '../src/assets/references'
import counters from '../src/assets/counters'

function testDefaultAssetsArray (array, fileName, className) {
  describe('src/assets/' + fileName + '.js', () => {
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
  testDefaultAssetsArray(socialLinks, 'socials', 'SocialMedia')
  testDefaultAssetsArray(references, 'references', 'Reference')
  testDefaultAssetsArray(counters, 'counters', 'Counter')

  describe('src/assets/careers.js', () => {
    it('module is exporting requirements array of proper objects', () => {
      for (const item of careerData.requirements) {
        assert.strictEqual(item.constructor.name, 'Requirement')
      }
    })
    it('module is exporting stack array of proper objects', () => {
      for (const item of careerData.stack) {
        assert.strictEqual(item.constructor.name, 'Stack')
      }
    })
  })

  describe('src/assets/contact.js', () => {
    it('module is exporting object with expected fields', () => {
      const fields = [
        'name',
        'form',
        'emails',
        'nip',
        'address',
        'city',
        'country'
      ]

      for (const field of fields) {
        assert.ok(Object.prototype.hasOwnProperty.call(contactData, field))
      }
    })
  })
})
