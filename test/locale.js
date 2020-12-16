import { describe, it } from 'mocha'
import * as assert from 'assert'
import flatten from 'flat'

import en from '../src/locale/en.json'
import pl from '../src/locale/pl.json'

function assertHaveSameKeys (...objects) {
  const allKeys = objects.reduce((keys, object) => keys.concat(Object.keys(object)), [])
  const union = new Set(allKeys)
  return objects.every(object => union.size === Object.keys(object).length)
}

describe('testing locale', () => {
  it('application localization files has the same key structure', () => {
    assert.ok(assertHaveSameKeys(flatten(en), flatten(pl)))
  })
})
