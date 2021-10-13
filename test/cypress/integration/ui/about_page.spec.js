describe('About page', () => {
  before(() => {
    cy.visit('/about')
  })

  it('Loads successfully', () => {
    cy.url().should('include', '/about')
  })

  it('Contains WMD Software logo', () => {
    cy.get('[data-cy="wmd-image"]')
      .should('have.attr', 'data-cy', 'wmd-image')
  })

  it('Shows no asterisk on Macbook 11', () => {
    cy.viewport('macbook-11')

    cy.get('[data-cy="asterisk-icon"]')
      .should('be.not.visible')
  })
})
