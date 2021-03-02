describe('contact page', () => {
  before(() => {
    cy.visit('/contact')
  })

  it('loads successfully', () => {
    cy.url().should('include', '/contact')
  })

  it('fills contact form', () => {
    cy.get('[data-cy="contact-form-question"]')
      .type('I would like to ask you about...')
      .should('have.value', 'I would like to ask you about...')

    cy.get('[data-cy="contact-form-email"]')
      .type('email@example.com')
      .should('have.value', 'email@example.com')
  })

  it('checks map', () => {
    cy.get('[data-cy="map"]')
      .should('have.attr', 'data-cy', 'map')
  })
})
