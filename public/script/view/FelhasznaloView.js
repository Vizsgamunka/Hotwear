class FelhasznaloView{
    #elem;
    constructor(elem, szuloElem){
        this.#elem = elem;
        szuloElem.append(`
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    ${elem.name}
                </th>
                <td class="px-6 py-4">
                    ${elem.email}
                </td>
                <td class="px-6 py-4">
                    ${elem.telefonszam}
                </td>
                <td class="px-6 py-4">
                    ${elem.jogosultsag}
                </td>
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        `);
    }
}

export default FelhasznaloView;