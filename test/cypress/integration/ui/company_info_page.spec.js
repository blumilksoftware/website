describe('company info page', () => {
    before(() => {
        cy.visit('/company')
    })

    it('loads successfully', () => {
        cy.url().should('include', '/company')
    })

    it('checks NIP', () => {
        cy.get('[data-cy="nip"]')
            .should('have.length', 1)
    })
})
