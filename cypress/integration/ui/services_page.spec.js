describe('service page', () => {
    before(function () {
        cy.visit('/services')
    })

    it('loads successfully', () => {
        cy.url().should('include', '/services')
    })

    it('load "Research & development" image and check alt text', () => {
        cy.get('.w-full.flex-grow > :nth-child(1)')
            .find('img')
            .should('have.attr', 'alt', 'Research & development')
            .should('have.attr', 'src').should('include', 'rnd')
    })
})
