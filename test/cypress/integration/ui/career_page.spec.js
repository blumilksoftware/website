describe('Career page', () => {
  before(() => {
    cy.visit('/career')
  })

  it('Loads successfully', () => {
    cy.url().should('include', '/career')
  })
})
