describe('privacy policy page', () => {
    before(function () {
        cy.visit('/privacy')
    })

    it('loads successfully', () => {
        cy.url().should('include', '/privacy')
    })

    it('checks content of header', () => {
        cy.get('.text-4xl > div').contains('Privacy policy')
    })
})
