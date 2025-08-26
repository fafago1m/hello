import { getProductById } from "@/actions/products";
import { Product } from "@prisma/client";
import React from 'react';
import { useRouter } from 'next/navigation';
import {
  CheckCircle,
  Circle,
  Mail,
  Phone,
  CreditCard,
  ShoppingCart,
} from 'lucide-react';
import { BorderBeam } from '@/components/ui/border-beam';
import MagicBadge from '@/components/ui/magic-badge';
import ProductOrderClient from "./ProductOrderClient";

interface ProductOrderPageProps {
  params: {
    id: string;
  };
}

const ProductOrderPage = async ({ params }: ProductOrderPageProps) => {
  const { id } = params;
  console.log("Fetching product with ID:", id);
  const product = await getProductById(id);
  console.log("Product found:", product);

  if (!product) {
    return (
      <div className="min-h-screen flex items-center justify-center text-white text-xl">
        Produk tidak ditemukan.
      </div>
    );
  }

  return <ProductOrderClient product={product} />;
};

export default ProductOrderPage;
