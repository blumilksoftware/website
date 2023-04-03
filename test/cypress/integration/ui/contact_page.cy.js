describe('Contact page', () => {
  beforeEach(() => {
    cy.visit('/contact')
  })

  it('Loads successfully', () => {
    cy.url().should('include', '/contact')
  })

  it('Fills contact form', () => {
    cy.get('[data-cy="contact-form-question"]').type('I would like to ask you about...')
    cy.get('[data-cy="contact-form-question"]').should('have.value', 'I would like to ask you about...')

    cy.get('[data-cy="contact-form-email"]').type('email@example.com')
    cy.get('[data-cy="contact-form-email"]').should('have.value', 'email@example.com')
  })

  it('Displays map', () => {
    cy.get('[data-cy="map"]').should('be.visible')
  })
})
