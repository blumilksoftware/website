describe('about page', () => {
    before(function () {
        cy.visit('/about')
    })

    it('loads successfully', () => {
        cy.url().should('include', '/about')
    })

    it('contains appropriate number of images ', () => {
        cy.get('div')
            .find('img').should('have.length', 7)
    })

    it('contains WMD Software logo', () => {
        cy.get('.my-24 > :nth-child(1) > .mt-8 > [slot="description"]')
            .find('img')
            .eq(3).should('have.attr', 'src').should('include', 'wmd')
    })
})
