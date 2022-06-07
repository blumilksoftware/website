describe('Company info page', () => {
  beforeEach(() => {
    cy.visit('/company')
  })

  it('Loads successfully', () => {
    cy.url().should('include', '/company')
  })

  it('Checks NIP', () => {
    cy.get('[data-cy="nip"]')
      .should('be.visible')
  })
})
