const cartData = JSON.parse(localStorage.getItem('cartData'))
const tableBody = document.getElementById("products-table")


function updatePrices(){
    var prices = document.getElementsByClassName('price')
    var TotalPrice = 0; 
    for(var i=0; i< prices.length; i++){
        TotalPrice += parseInt(prices[i].innerText)
    }
    TotalPrice = TotalPrice
    var fee = parseInt(document.getElementById('fee').innerText)
    document.getElementById('gtotal').innerText = TotalPrice
    document.getElementById('topay').innerText  = TotalPrice + fee
    document.getElementById('formPrice').value  = TotalPrice + fee
}

function showProducts(){
    cartData.map(item=> {
        var tableRow= document.createElement('tr');
        
        var rowData1= document.createElement('td');
        var img= document.createElement('img');
        img.classList.add('product_image')
        img.src= item.img;
        rowData1.appendChild(img);
    
        var rowData2= document.createElement('td');
        rowData2.innerText= item.name;
        

    
        var rowData4= document.createElement('td');
        rowData4.classList.add('price')
        rowData4.innerText= item.price;
    
        tableRow.appendChild(rowData1);
        tableRow.appendChild(rowData2);
        tableRow.appendChild(rowData4);
    
        tableBody.appendChild(tableRow);
    })
    //
    updatePrices() 

}
showProducts()


document.querySelectorAll('input[type="radio"]').forEach(element => {
    element.addEventListener("click", function(){
        if(this.value === "home"){
            document.getElementById('fee').innerText = 4
            updatePrices()
        }else{
            document.getElementById('fee').innerText = 0
            updatePrices()
        }
    })
})