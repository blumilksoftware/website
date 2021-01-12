import { describe, it } from 'mocha'
import * as assert from 'assert'
import flatten from 'flat'

import en from '../src/locale/en.json'
import pl from '../src/locale/pl.json'

import careers from '../src/assets/careers'
import counters from '../src/assets/counters'
import navigation from '../src/assets/navigation'
import references from '../src/assets/references'

const locales = [en, pl]

function assertHaveSameKeys (...objects) {
  const allKeys = objects.reduce((keys, object) => keys.concat(Object.keys(object)), [])
  const union = new Set(allKeys)
  return objects.every(object => union.size === Object.keys(object).length)
}

function assertIndexesAreTranslated (locales, index) {
  for (const locale of locales) {
    assert.ok(index.split('.').reduce((o, i) => o[i], locale))
  }
}

describe('testing locale', () => {
  it('application localization files has the same key structure', () => {
    assert.ok(assertHaveSameKeys(flatten(en), flatten(pl)))
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
  it('references', () => {
    for (const item of references) {
      assertIndexesAreTranslated(locales, 'pages.about.references.references.' + item.id)
    }
  })
})
