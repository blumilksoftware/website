describe('privacy policy page', () => {
  before(() => {
    cy.apiUrl('/privacy')
  })

  it('loads successfully', () => {
    cy.url().should('include', '/privacy')
  })

  it('checks content of header', () => {
    cy.get('[data-cy="privacy-policy-header"]')
      .contains('Privacy policy')
  })
})
