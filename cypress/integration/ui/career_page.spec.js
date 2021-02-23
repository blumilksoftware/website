describe('career page', () => {
    before(function () {
        cy.visit('/career')
    })

    it('loads successfully', () => {
        cy.url().should('include', '/career')
    })

    it('check PHP icon', () => {
        cy.get(':nth-child(1) > .big')
            .should('have.class', 'big php icon')
    })
})
