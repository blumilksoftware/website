describe('career page', () => {
  before(() => {
    cy.visit('/career')
  })

  it('loads successfully', () => {
    cy.url().should('include', '/career')
  })

  it('checks if PHP icon exists on the list', () => {
    cy.get('[data-cy="stack-list"]')
      .should('have.attr', 'data-cy', 'stack-list')
      .find('[data-cy="php icon"]')
      .should('have.attr', 'data-cy', 'php icon')
  })
})
