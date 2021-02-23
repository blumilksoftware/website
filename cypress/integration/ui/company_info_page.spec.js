describe('company info page', () => {
    before(function () {
        cy.visit('/company')
    })

    it('loads successfully', () => {
        cy.url().should('include', '/company')
    })

    it('checks number of large texts', () => {
        cy.get('div').find('.text-5xl').should('have.length', 2)
    })
})
