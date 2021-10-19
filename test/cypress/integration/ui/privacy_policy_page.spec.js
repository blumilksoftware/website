describe('Privacy policy page', () => {
  beforeEach(() => {
    cy.visit('/privacy')
  })

  it('Loads successfully', () => {
    cy.url().should('include', '/privacy')
  })

  it('Checks content of header', () => {
    cy.get('[data-cy="privacy-policy-header"]')
      .contains('Privacy policy')
  })
})
