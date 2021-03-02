describe('about page', () => {
  before(() => {
    cy.visit('/about')
  })

  it('loads successfully', () => {
    cy.url().should('include', '/about')
  })

  it('contains appropriate number of images in references section', () => {
    cy.get('[data-cy="references-images"]')
      .find('img').should('have.length', 4)
  })

  it('contains WMD Software logo', () => {
    cy.get('[data-cy="wmd-image"]')
      .should('have.attr', 'data-cy', 'wmd-image')
  })

  it('shows no asterisk on Macbook 11', () => {
    cy.viewport('macbook-11')

    cy.get('[data-cy="asterisk-icon"]')
      .should('be.not.visible')
  })
})
