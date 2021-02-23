describe('home page', () => {
    before(function () {
        cy.visit('/')
    })

    it('loads successfully', () => {
        cy.url().should('include', '/')
    })

    it('check if there are bubbles', () => {
        cy.get('.circles.svelte-f1rzqs div.svelte-f1rzqs')
    })

    it('check hamburger menu at iPhone 6', () => {
        cy.viewport('iphone-6')
        cy.get('i')
            .first()
            .should('have.class', 'large bars icon')
            .should('be.visible')
    })

    it('hamburger menu is not visible for desktop ', () => {
        cy.get('i')
            .first()
            .should('have.class', 'large bars icon')
            .should('be.not.visible')
    })

    it('clicking "services" navigates to a new url', () => {
        cy.contains('Services').click()
        cy.url().should('include', '/services')
    })

    it('change language to Polish', () => {
        cy.get('img.w-6')
            .should('have.attr', 'alt', 'polski').click()
    })
})
