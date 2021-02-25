describe('service page', () => {
  before(() => {
    cy.apiUrl('/services')
  })

  it('loads successfully', () => {
    cy.url().should('include', '/services')
  })

  it('loads "Research & development" image and checks alt text', () => {
    cy.get('[data-cy="rnd-image"]')
      .should('have.attr', 'alt', 'Research & development')
      .should('have.attr', 'src').should('include', 'rnd')
  })
})
