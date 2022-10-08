import { describe, it } from 'mocha'
import chai from 'chai'

import navigationItems from '../src/assets/navigation.js'
import socialLinks from '../src/assets/socials.js'
import careerData from '../src/assets/careers.js'
import contactData from '../src/assets/contact.js'
import clients from '../src/assets/clients.js'
import counters from '../src/assets/counters.js'

function testDefaultAssetsArray (array, fileName, className) {
  describe('src/assets/' + fileName + '.js', () => {
    it('module is exporting valid array', () => {
      chai.should().exist(Array.isArray(array))
    })

    it('module is exporting array of proper objects', () => {
      for (const item of array) {
        chai.should().equal(item.constructor.name, className)
      }
    })
  })
}

describe('testing assets', () => {
  testDefaultAssetsArray(navigationItems, 'navigation', 'NavigationItem')
  testDefaultAssetsArray(socialLinks, 'socials', 'SocialMedia')
  testDefaultAssetsArray(clients, 'clients', 'Client')
  testDefaultAssetsArray(counters, 'counters', 'Counter')

  describe('src/assets/careers.js', () => {
    it('module is exporting requirements array of proper objects', () => {
      for (const item of careerData.requirements) {
        chai.should().equal(item.constructor.name, 'Requirement')
      }
    })
    it('module is exporting stack array of proper objects', () => {
      for (const item of careerData.stack) {
        chai.should().equal(item.constructor.name, 'Stack')
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
        'vat',
        'regon',
        'krs',
        'addresses'
      ]

      for (const field of fields) {
        chai.should().equal(Object.prototype.hasOwnProperty.call(contactData, field), true)
      }
    })
  })
})
