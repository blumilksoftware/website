describe('Career page', () => {
  beforeEach(() => {
    cy.visit('/career')
  })

  it('Loads successfully', () => {
    cy.url().should('include', '/career')
  })
})
