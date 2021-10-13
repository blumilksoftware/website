describe('Service page', () => {
  before(() => {
    cy.visit('/services')
  })

  it('Loads successfully', () => {
    cy.url().should('include', '/services')
  })

  it('Loads "Research & development" image', () => {
    cy.get('[data-cy="rnd-image"]')
      .should('have.attr', 'alt', 'Research & development')
      .should('have.attr', 'src').should('include', 'rnd')
  })
})
