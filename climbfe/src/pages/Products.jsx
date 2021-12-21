import React, {useState, useEffect} from 'react';
import {Link, useHistory} from 'react-router-dom';
import axios from 'axios';
import swal from 'sweetalert';

function Products() {

    const [loading, setLoading] = useState(true);
    const [products, setProducts] = useState([]);

    useEffect(() => {

        axios.get(`/api/products`).then(res=>{
            if(res.status === 200)
            {
                setProducts(res.data.products)
                setLoading(false);
            }
        });

    }, []);

    const deleteProduct = (e, id) => {
        e.preventDefault();
        
        const thisClicked = e.currentTarget;
        thisClicked.innerText = "Deleting";

        axios.delete(`/api/delete-product/${id}`).then(res=>{
            if(res.data.status === 200)
            {
                swal("Deleted!",res.data.message,"success");
                thisClicked.closest(".product").remove();
            }
            else if(res.data.status === 404)
            {
                swal("Error",res.data.message,"error");
                thisClicked.innerText = "Delete";
            }
        });
    }

    if(loading)
    {
        return <div className="container"><h4>Loading Product Data...</h4></div>
    }
    else
    {
        var product_HTMLTABLE = "";

        product_HTMLTABLE = products.map( (item, index) => {
            return (
                <div key={index} className="card col-4 mb-5 product">
                  <img className="card-img-top" src={item.image} alt={item.description} style={{maxHeight: "300px", objectFit: "cover"}}/>

                  <div className="card-body">
                    <h5 className="card-title">{item.name}</h5>

                    <p className="card-text">{item.description}</p>
                    <p className="card-text">Price: {item.price}</p>
                    
                    <button type="button" onClick={(e) => deleteProduct(e, item.id)} className="btn btn-danger btn-sm">Delete ⛔</button>
                  </div>
                </div>
            );
        });
    }

    return (
        <div>
            <div className="container px-3">
                <div className="row">
                        {product_HTMLTABLE}
                </div>
            </div>
        </div>
    );

}

export default Products;