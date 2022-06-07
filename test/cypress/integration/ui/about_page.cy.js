describe('About page', () => {
  beforeEach(() => {
    cy.visit('/about')
  })

  it('Loads successfully', () => {
    cy.url().should('include', '/about')
  })

  it('Shows no asterisk on Macbook 11', () => {
    cy.viewport('macbook-11')

    cy.get('[data-cy="asterisk-icon"]')
      .should('be.not.visible')
  })
})
