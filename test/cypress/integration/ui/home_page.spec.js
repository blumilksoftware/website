describe('home page', () => {
  before(() => {
    cy.apiUrl('/')
  })

  it('loads successfully', () => {
    cy.url().should('include', '/')
  })

  it('checks if there are bubbles', () => {
    cy.get('[data-cy="bubbles"]')
      .should('have.attr', 'data-cy', 'bubbles')
  })

  it('checks hamburger menu at iPhone 6', () => {
    cy.viewport('iphone-6')

    cy.get('[data-cy="menu-bars"]')
      .should('have.attr', 'data-cy', 'menu-bars')
      .should('be.visible')
  })

  it('hamburger menu is not visible for desktop', () => {
    cy.get('[data-cy="menu-bars"]')
      .should('have.attr', 'data-cy', 'menu-bars')
      .should('be.not.visible')
  })

  it('clicking "services" navigates to a new url', () => {
    cy.get('[data-cy="Services"]').click()
    cy.url().should('include', '/services')
  })

  it('changes language to Polish', () => {
    cy.get('[data-cy="polski"]')
      .should('have.attr', 'data-cy', 'polski').click()

    cy.get('[data-cy="English"]')
      .should('have.attr', 'data-cy', 'English')
  })
})
