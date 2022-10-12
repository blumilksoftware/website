import { describe, it } from 'mocha'
import chai from 'chai'
import flatten from 'flat'
import fs from 'fs'

const en = JSON.parse(fs.readFileSync('src/locale/en.json', 'utf8'))
const pl = JSON.parse(fs.readFileSync('src/locale/pl.json', 'utf8'))

import careers from '../src/assets/careers.js'
import counters from '../src/assets/counters.js'
import navigation from '../src/assets/navigation.js'

const locales = [en, pl]

function assertHaveSameKeys (...objects) {
  const allKeys = objects.reduce(
    (keys, object) => keys.concat(Object.keys(object)),
    [],
  )
  const union = new Set(allKeys)

  return objects.every(object => union.size === Object.keys(object).length)
}

function assertIndexesAreTranslated (locales, index) {
  for (const locale of locales) {
    chai.should().exist((index.split('.').reduce((o, i) => o[i], locale)))
  }
}

describe('testing locale', () => {
  it('application localization files has the same key structure', () => {
    chai.should().equal(assertHaveSameKeys(flatten(en), flatten(pl)), true)
  })
})

describe('testing variables translations', () => {
  it('career requirements', () => {
    for (const item of careers.requirements) {
      assertIndexesAreTranslated(locales, item.requirement)
    }
  })
  it('career stack', () => {
    for (const item of careers.stack) {
      assertIndexesAreTranslated(locales, item.name)
    }
  })
  it('counters', () => {
    for (const item of counters) {
      assertIndexesAreTranslated(locales, item.label)
    }
  })
  it('navigation', () => {
    for (const item of navigation) {
      assertIndexesAreTranslated(locales, item.label)
    }
  })
})
