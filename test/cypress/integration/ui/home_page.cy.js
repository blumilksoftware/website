describe('Home page', () => {
  beforeEach(() => {
    cy.visit('/')
  })

  it('Loads successfully', () => {
    cy.url().should('include', '/')
  })

  it('Checks bubbles', () => {
    cy.get('[data-cy="bubbles"]')
      .should('have.attr', 'data-cy', 'bubbles')
  })

  it('Displays hamburger menu at iPhone 6', () => {
    cy.viewport('iphone-6')

    cy.get('[data-cy="menu-bars"]')
      .should('have.attr', 'data-cy', 'menu-bars')
      .should('be.visible')
  })

  it('Displays no hamburger menu for desktop', () => {
    cy.get('[data-cy="menu-bars"]')
      .should('have.attr', 'data-cy', 'menu-bars')
      .should('be.not.visible')
  })

  it('Navigating to services page', () => {
    cy.get('[data-cy="Services"]').click()
    cy.url().should('include', '/services')
  })

  it('Changes language to Polish', () => {
    cy.get('#i18n-switch')
      .should('have.attr', 'data-cy', 'polski').click({ force: true })

    cy.get('#i18n-switch')
      .should('have.attr', 'data-cy', 'English')
  })

  it('Selected locale will be remembered', () => {
    cy.get('#i18n-switch')
      .should('have.attr', 'data-cy', 'polski').click({ force: true })

    cy.get('#i18n-switch')
      .should('have.attr', 'data-cy', 'English')

    cy.reload()

    cy.get('#i18n-switch')
      .should('have.attr', 'data-cy', 'English')
  })
})
